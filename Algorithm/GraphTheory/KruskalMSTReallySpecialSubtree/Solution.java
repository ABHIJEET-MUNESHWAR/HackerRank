package com.hackerrank.algorithms.graphtheory.kruskalmstseallyspecialsubtree;

import java.util.ArrayList;
import java.util.Collections;
import java.util.Scanner;

class Edge implements Comparable<Edge> {
    protected int a, b, cost;

    Edge(int a, int b, int cost) {
        this.a = a;
        this.b = b;
        this.cost = cost;
    }

    public int compareTo(Edge x) {
        return Integer.compare(this.cost, x.cost);
    }
}

public class Solution {
    protected static int[] visited;

    protected static int getParent(int a) {
        while (visited[a] != 0) {
            a = visited[a];
        }
        return a;
    }

    protected static void union(int a, int b) {
        int parentA = getParent(a);
        int parentB = getParent(b);
        visited[parentB] = parentA;
    }

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int v = scanner.nextInt();
        int e = scanner.nextInt();
        visited = new int[v + 1];
        ArrayList<Edge> list = new ArrayList<Edge>();
        for (int i = 0; i < e; i++) {
            int v1 = scanner.nextInt();
            int v2 = scanner.nextInt();
            int w = scanner.nextInt();
            list.add(new Edge(v1, v2, w));
        }
        scanner.close();
        Collections.sort(list);
        int edges = 0;
        int total = 0;
        for (Edge edge : list) {
            int parentA = getParent(edge.a);
            int parentB = getParent(edge.b);
            if (parentA != parentB) {
                total += edge.cost;
                union(parentA, parentB);
                edges++;
            }
            if(edges == e-1) {
                break;
            }
        }
        System.out.println(total);
    }
}