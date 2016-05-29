#include <stdio.h>
#include <string.h>
#include <math.h>
#include <stdlib.h>

int
FindShortestSubstitution (
    char* Gene,
    int GeneLength
    )

/*++

Routine description:

    This routine returns the length of shortest substitution needed
    in order to modify Gene to make it steady.

Parameters:

    Gene - String containing A, C, T, G characters describing the gene.

    GeneLength - Length of Gene in characters. Doesn't include null.

Return value:

    Length of shortest substitution needed to make gene steady.

--*/

{
    int StartIndex;
    int StopIndex;
    int CountA;
    int CountC;
    int CountG;
    int CountT;
    int ReplaceA;
    int ReplaceC;
    int ReplaceG;
    int ReplaceT;
    int SubstringLength;

    //
    // First figure out how many times each of the amino acids
    // appears in gene.
    //

    CountA = 0;
    CountC = 0;
    CountG = 0;
    CountT = 0;

    for (StartIndex = 0; StartIndex < GeneLength; StartIndex += 1) {
        if (Gene[StartIndex] == 'A') {
            CountA += 1;
        } else if (Gene[StartIndex] == 'C') {
            CountC += 1;
        } else if (Gene[StartIndex] == 'G') {
            CountG += 1;
        } else {
            CountT += 1;
        }
    }

    //
    // If gene is already steady there is no need for any substitutions.
    //

    if ((CountA == CountC) && (CountC == CountG) && (CountG == CountT)) {
        SubstringLength = 0;
        goto cleanup;
    }

    //
    // Now when we know how many times each amino acid appears in
    // gene we can determine which amino acids appear too many times
    // and should be replaced with other amino acids such that gene
    // becomes steady.
    //

    if (CountA > (GeneLength / 4)) {
        ReplaceA = CountA - (GeneLength / 4);
    } else {
        ReplaceA = 0;
    }

    if (CountC > (GeneLength / 4)) {
        ReplaceC = CountC - (GeneLength / 4);
    } else {
        ReplaceC = 0;
    }

    if (CountG > (GeneLength / 4)) {
        ReplaceG = CountG - (GeneLength / 4);
    } else {
        ReplaceG = 0;
    }

    if (CountT > (GeneLength / 4)) {
        ReplaceT = CountT - (GeneLength / 4);
    } else {
        ReplaceT = 0;
    }

    //
    // Now we know which amino acids should be replaced and how many
    // of them. Find shortest substring which contains all amino
    // acids which should be replaced.
    //
    // Find first substring which contains all amino acids such that
    // we get baseline length.
    //

    CountA = 0;
    CountC = 0;
    CountG = 0;
    CountT = 0;

    for (StopIndex = 0; StopIndex < GeneLength; StopIndex += 1) {
        if (Gene[StopIndex] == 'A') {
            CountA += 1;
        } else if (Gene[StopIndex] == 'C') {
            CountC += 1;
        } else if (Gene[StopIndex] == 'G') {
            CountG += 1;
        } else {
            CountT += 1;
        }

        //
        // Check if we found substring which contains all amino acids
        // to be replaced.
        //

        if ((CountA >= ReplaceA) && (CountC >= ReplaceC) &&
            (CountG >= ReplaceG) && (CountT >= ReplaceT))
        {
            break;
        }
    }

    //
    // Use current substring length (starting from index 0) as baseline
    // for how much will need to be replace and try to find shorter one.
    //

    SubstringLength = StopIndex + 1;

    //
    // Try shortening the substring from left such that requirement is
    // still met. If incrementing start index breaks requirement move
    // both start and stop index. Note that there is no reason to move
    // only stop index as we already know that at that time that there
    // is substring of SubstringLength which can be used, so there is no
    // need to look for longer ones.
    //

    StartIndex = 0;

    while (1) {

        while (1) {

            //
            // Check if removing amino acid from beginning of substring
            // still produces substring which satisfies replace requirement.
            //

            if (Gene[StartIndex] == 'A') {
                CountA -= 1;
            } else if (Gene[StartIndex] == 'C') {
                CountC -= 1;
            } else if (Gene[StartIndex] == 'G') {
                CountG -= 1;
            } else {
                CountT -= 1;
            }

            StartIndex += 1;

            if ((CountA >= ReplaceA) && (CountC >= ReplaceC) &&
                (CountG >= ReplaceG) && (CountT >= ReplaceT))
            {
                SubstringLength = StopIndex - StartIndex + 1;
            } else {
                break;
            }
        }

        //
        // Start of substring was moved past substring which satisfied
        // requirement. Move stop of it such that we still have substring
        // of currently smallest known substring length.
        //

        StopIndex += 1;

        if (StopIndex > GeneLength) {
            break;
        }

        if (Gene[StopIndex] == 'A') {
            CountA += 1;
        } else if (Gene[StopIndex] == 'C') {
            CountC += 1;
        } else if (Gene[StopIndex] == 'G') {
            CountG += 1;
        } else {
            CountT += 1;
        }
    }

cleanup:

    return SubstringLength;
}

int main() {
    char* Gene;
    int GeneLength;
    int SubstitutionLength;
    int ErrorCode;

    //
    // Initialize locals.
    //

    Gene = NULL;

    //
    // Get gene and gene length from stdin.
    //

    scanf("%d", &GeneLength);

    //
    // Allocate enough memory to hold the gene string.
    // Allow for NULL terminator.
    //

    Gene = malloc((GeneLength + 1) * sizeof(char));

    if (Gene == NULL) {

        //
        // Which error codes should be used?
        //

        ErrorCode = -1;
        goto cleanup;
    }

    scanf("%s", Gene);

    SubstitutionLength = FindShortestSubstitution(Gene, GeneLength);

    printf("%d\n", SubstitutionLength);

cleanup:

    if (Gene != NULL) {
        free(Gene);
    }

    return 0;
}