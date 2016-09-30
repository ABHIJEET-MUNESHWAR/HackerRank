#include <stdio.h>
#include <string.h>
#include <math.h>
#include <stdlib.h>
#define LL unsigned long long int

LL mod = 1000000007;

int main() {
    int i, j;
    LL lb, ub, len, sum = 0;
    scanf("%llu", &len);
    LL arr[len];
    for(i=0; i<len; i++) {
        scanf("%llu", &arr[i]);
    }
    scanf("%llu", &lb);
    scanf("%llu", &ub);
    if(ub<=0) {
        return 0;
    }
    if (len == 0) {
        return 0;
    }
    LL dp[ub+1];
    memset(dp, 0, sizeof(dp));
    dp[0] = 1;
    for (i = 0; i < len; i++) {
        for (j = arr[i]; j <= ub; j++) {
            dp[j] += (dp[j - (arr[i]%mod)]) % (mod);
        }
    }
    for (i = lb; i <= ub; i++) {
        sum += (dp[i]) % (mod);
    }

    sum = sum % mod;

    printf("%llu\n", sum);
    return 0;
}
