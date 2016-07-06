import java.util.ArrayList;
import java.util.Collections;
import java.util.List;
import java.io.*;

public class KruskalMST {
    public class EdgeComparator implements Comparator<Edge<integer>> {
        @Override
        public int compare(Edge<integer> edge1, Edge<integer> edge2) {
            if(edge1.getWeight()<=edge2.getWeight) {
                return -1;
            } else {
                return 1;
            }
        }
    }
}

public class Solution {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        Graph<integer> graph = new Graph<integer>(false);
        int v = sc.nextInt();
        int e = sc.nextInt();
        for(int i=0; i< e; i++) {
            graph.addEdge(sc.nextInt(), sc.nextInt(), sc.nextInt());
        }
        KruskalMST = new KruskalMST();
    }
}