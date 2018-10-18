import java.util.*;
class LinkedList
{
    Node my_first_node;
    private static Scanner sc=new Scanner(System.in);
    void create_linked_list(int []a,int n)
    {
        Node ns=new Node(a[0],null);
        this.my_first_node=ns;
        for(int i=1;i<10;i++)
        {
            Node temp=new Node(a[i],null);
            ns.next=temp;
            ns=ns.next;
        }
        ns.next=null;
    }
    void display()
    {
        Node curr=this.my_first_node;
        while(curr!=null)
        {
            System.out.println("Node "+curr.data);
            curr=curr.next;
        }
    }
    public static void main(String ar[])
    {
        int i=0,a[]=new int[10];
        for(i=0;i<10;i++)
        {
            a[i]=sc.nextInt();
        }
        LinkedList ll=new LinkedList();
        ll.create_linked_list(a,10);
        ll.display();
        /*for(i=0;i<10;i++)
        {
            System.out.println(" integer "+a[i]);
        }*/
    }
}