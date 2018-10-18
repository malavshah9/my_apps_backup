// Simple weighted graph representation 
// Uses an Adjacency Linked Lists, suitable for sparse graphs

import java.io.*;

class GraphLists {
    class Node {
        public int vert;
        public int wgt;
        public Node next;
    }
    
    // V = number of vertices
    // adj[] is the adjacency lists array
    private int V;
    private Node[] adj;
    
    // default constructor
    public GraphLists(String graphFile)  throws IOException
    {
        int u, v, wgt;

        FileReader fr = new FileReader(graphFile);
		BufferedReader reader = new BufferedReader(fr);
	           
        String splits = " +";  // multiple whitespace as delimiter
		String line = reader.readLine();        
        V = Integer.parseInt(line);
        
        // create adjacency lists, initialised to sentinel node z
        adj = new Node[V];
        for(v = 0; v < V; ++v)
           adj[v] = null;               
        
        // read the edges
        String[] parts;
        
        System.out.println("Reading edges from text file");
        while ((line = reader.readLine()) != null)
        {
            parts = line.split(splits);
            u = Integer.parseInt(parts[0]);
            v = Integer.parseInt(parts[1]); 
            wgt = Integer.parseInt(parts[2]);
            
            System.out.println("Edge " + u + "--(" + wgt + ")--" + v);   
            // write code to put edge into adjacency list     
            
            Node prev = null, curr = adj[u];
            while (curr != null) 
            {
            	prev = curr;
            	curr = curr.next;
            }
            	
            if (prev == null) {
            	adj[u] = new Node();
            	adj[u].vert = v;
            	adj[u].wgt = wgt;
            	adj[u].next = null;
            }
            else {
            	Node x = new Node();
            	prev.next = x;
            	x.vert = v;
            	x.wgt = wgt;
            	x.next = null;	
            }
        }	       
    }
   
    
    // method to display the graph representation
    public void display() {
        int v;
        
        for(v=0; v<V; ++v){
            System.out.print("\nadj[" + v + "] ->" );
            for(Node curr = adj[v]; curr != null; curr = curr.next) 
                System.out.print(" |" + curr.vert + " | " + curr.wgt + "| ->");    
        }
        System.out.println("");
    }
    public int givesOutDegree(Node n){
        int cnt=0;
        while(n!=null){
            n=n.next;
            cnt++;
        }
        return cnt;
    }
    private int givesInDegree(Node n){
        int vertices=n.vert;
        int cnt=0;
        int v;
        
        for(v=0; v<V; ++v){
            for(Node curr = adj[v]; curr != null; curr = curr.next) 
                if(curr.vert==vertices)
                {
                    cnt++;
                }
        }
        return cnt;
    }
    public int maxOutDegree()
    {
    	int max=0;
        int vert=-1;
    	for(int i=0;i<V;i++)
    	{
    		Node current_node=adj[i];
            int out_nodes=givesOutDegree(current_node);
            if(out_nodes>max){
                max=out_nodes;
            }
    	}
        System.out.println("And that vertices is " + vert);
        System.out.println("adj[0]  =  "+givesInDegree(adj[0]));
    	return max;
    }

    public static void main(String[] args) throws IOException
    {
        String fname = "wGraph.txt";               

        GraphLists g = new GraphLists(fname);
        System.out.println("MaxOutDegree = "+g.maxOutDegree());
        g.display();
    }

}

