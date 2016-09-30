<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp, "%s", $string);
$str_len = strlen($string);

#count number of occurences of each character
$count_chars = array();
for($i=0;$i<$str_len;$i++)
{
    $cur_char = substr($string, $i, 1);
    $count_chars[$cur_char] = isset($count_chars[$cur_char]) ? ++$count_chars[$cur_char] : 1;
}

#sort in alphabetical order of key  i.e. characters
ksort($count_chars);

$asc_chars = array(); #store unique characters in alphabetical order (indexed from 0..)
$count_half_chars = array(); #In output string, each character will appear only n/2 of total occurences(n) in the input string
$count_so_far = array(); #count occurences of each character that you have traversed so far
$got_so_far = array(); #respective count for each characters that is copied to output so far

foreach($count_chars as $char => $cnt)
{
    $asc_chars[] = $char;
    $got_so_far[$char] = 0; #initialize each char to zero
    $count_so_far[$char] = 0; #initialize each char to zero
    $count_half_chars[$char] = floor($cnt/2);
}

$smallest_char_index = 0; #hold the index of the current smallest character (it will be used as an index to asc_chars)
$output = "";
$last_backtrack_index = 0; #index of the last character that was copied to output string. It is used while backtracking, when you have to copy any character because you cannot ignore it any further (that is you already have ignored n/2 occurences of that character)

#traverse the string from right to left
for($i=$str_len-1;$i>=0;$i--)
{
    $cur_char = substr($string, $i, 1);

    #increased the traversed array count for this character
    $count_so_far[$cur_char]++;

    #if cur_char is the smallest character and we haven't got number of required occurences in output string, then add it to output string
    if($cur_char == $asc_chars[$smallest_char_index] && $got_so_far[$cur_char] < $count_half_chars[$cur_char])
    {
        $got_so_far[$cur_char]++; #increment "copied to output" count for this character
        $output .= $cur_char;
        //print $cur_char;
        $last_backtrack_index = $i;

        #go to next smallest character, if you already copied n/2 occurences of this character to o/p
        if(!($got_so_far[$asc_chars[$smallest_char_index]] < $count_half_chars[$asc_chars[$smallest_char_index]]))
        {
            $smallest_char_index++;
        }
    }
    # if you come across any character that you can't ignore any further, then backtrack to last best seen character, undo changes to count_so_far till last best seen character(consider them not traversed), add the last best seen character to o/p, start from there
    else if(($count_so_far[$cur_char]-$got_so_far[$cur_char]) > $count_half_chars[$cur_char])
    {
        $sub_array = array();

        #Find the best seen character from current character till last copied character (ignore best seen character that has been already copied over to o/p - n/2 times)
        $min_char = $cur_char;
        $min_char_index = $i;
        for($j=$i+1;$j<$last_backtrack_index;$j++)
        {
            $sub_char = substr($string, $j, 1);
            if($sub_char <= $min_char && $got_so_far[$sub_char] < $count_half_chars[$sub_char])
            {
                $min_char = $sub_char;
                $min_char_index = $j;
            }
        }

        #undo changes to $count_so_far (as we are backtracking, they are as good as not seen. we will come to them again)
        for($j=$i;$j<$min_char_index;$j++)
        {
            $sub_char = substr($string, $j, 1);
            $count_so_far[$sub_char]--;
        }

        $got_so_far[$min_char]++;
        $output .= $min_char;
        $i = $min_char_index;
        //print implode("",$sub_array);
        $last_backtrack_index = $i;
    }
    //print $cur_char." --> ".$count_so_far[$cur_char]." --> ".$got_so_far[$cur_char]." --> ".$count_half_chars[$cur_char]." --> Smallest: ".$asc_chars[$smallest_char_index]."\n";
}
print $output;
?>