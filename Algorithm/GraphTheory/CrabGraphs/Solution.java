package com.hackerrank.algorithms.graphtheory.crabgraphs;

import java.util.*;

/**
 * Created by abhijeet on 09/07/16.
 */
public class Solution {
    public int maxFlow(int capacity[][], int source, int sink) {
        //declare and initialize residual capacity as total avaiable capacity initially.
        int residualCapacity[][] = new int[capacity.length][capacity[0].length];
        for (int i = 0; i < capacity.length; i++) {
            for (int j = 0; j < capacity[0].length; j++) {
                residualCapacity[i][j] = capacity[i][j];
            }
        }
        //this is parent map for storing BFS parent
        Map<Integer, Integer> parent = new HashMap<>();

        //stores all the augmented paths
        List<List<Integer>> augmentedPaths = new ArrayList<>();

        //max flow we can get in this network
        int maxFlow = 0;

        //see if augmented path can be found from source to sink.
        while (bfs(residualCapacity, parent, source, sink)) {
            List<Integer> augmentedPath = new ArrayList<>();
            int flow = Integer.MAX_VALUE;
            //find minimum residual capacity in augmented path
            //also add vertices to augmented path list
            int v = sink;
            while (v != source) {
                augmentedPath.add(v);
                int u = parent.get(v);
                if (flow > residualCapacity[u][v]) {
                    flow = residualCapacity[u][v];
                }
                v = u;
            }
            augmentedPath.add(source);
            Collections.reverse(augmentedPath);
            augmentedPaths.add(augmentedPath);

            //add min capacity to max flow
            maxFlow += flow;

            //decrease residual capacity by min capacity from u to v in augmented path
            // and increase residual capacity by min capacity from v to u

            v = sink;
            while (v != source) {
                int u = parent.get(v);
                residualCapacity[u][v] -= flow;
                residualCapacity[v][u] += flow;
                v = u;
            }
        }
        return maxFlow;
    }

    private boolean bfs(int[][] residualCapacity, Map<Integer, Integer> parent, int source, int sink) {
        Set<Integer> visited = new HashSet<>();
        Queue<Integer> queue = new LinkedList<>();
        queue.add(source);
        visited.add(source);
        boolean foundAugmentedPath = false;
        //see if we can find augmented path from source to sink
        while (!queue.isEmpty()) {
            int u = queue.poll();
            for (int v = 0; v < residualCapacity.length; v++) {
                //explore the vertex only if it is not visited and its residual capacity is
                //greater than 0
                if (!visited.contains(v) && residualCapacity[u][v] > 0) {
                    //add in parent map saying v got explored by u
                    parent.put(v, u);
                    //add v to visited
                    visited.add(v);
                    //add v to queue for BFS
                    queue.add(v);
                    //if sink is found then augmented path is found
                    if (v == sink) {
                        foundAugmentedPath = true;
                        break;
                    }
                }
            }
        }
        return foundAugmentedPath;
    }

    public static void main(String args[]) {
        int vertices;
        int graph[][];
        Solution ff = new Solution();
        Scanner sc = new Scanner(System.in);
        int cases = sc.nextInt();
        for (int c = 0; c < cases; c++) {
            int nodes = sc.nextInt();
            int t = sc.nextInt();
            int edges = sc.nextInt();
            vertices = 2 * nodes + 2;
            graph = new int[vertices][vertices];
            int degree[] = new int[nodes];
            for (int i = 0; i < edges; i++) {
                int v1 = sc.nextInt() - 1;
                int v2 = sc.nextInt() - 1;
                int top1 = v1 * 2;
                int top2 = v2 * 2;
                int bot1 = v1 * 2 + 1;
                int bot2 = v2 * 2 + 1;
                graph[top1][bot2] = 1;
                graph[top2][bot1] = 1;
                degree[v1]++;
                degree[v2]++;
            }
            int s = 2 * nodes;
            int v = 2 * nodes + 1;
            for (int i = 0; i < nodes; i++) {
                graph[s][2 * i] = Math.min(t, degree[i]);
                graph[2 * i + 1][v] = 1;
            }
            System.out.println(ff.maxFlow(graph, s, v));
        }
    }
}
