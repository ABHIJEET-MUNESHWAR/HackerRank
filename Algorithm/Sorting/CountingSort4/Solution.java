import java.io.*;
import java.util.*;
import java.text.*;
import java.math.*;
import java.util.regex.*;

public class Solution {

    	public static void main(String[] args) {
		Scanner in = new Scanner(System.in);
		int size = Integer.parseInt(in.nextLine());
		StringBuilder[] words = new StringBuilder[size];

		String split[];
		for (int i = 0; i < size/2; i++) {
			split = getSplit(in, words);
			words[Integer.parseInt(split[0])].append("- ");
		}

		for (int i = size/2; i < size; i++) {
			split = getSplit(in, words);
			words[Integer.parseInt(split[0])].append(split[1] + " ");
		}

		StringBuilder s = new StringBuilder("");
		for (int i = 0; i < size; i++) {
			if (words[i] != null) {
				s.append(words[i]);
			}
		}

		System.out.println(s);
	}

	public static String[] getSplit(Scanner in, StringBuilder[] words) {
		String input = in.nextLine();
		String[] split = input.split("\\s+");
		int number = Integer.parseInt(split[0]);

		if (words[number] == null) {
			words[number] = new StringBuilder("");
		}

		return split;
	}
}