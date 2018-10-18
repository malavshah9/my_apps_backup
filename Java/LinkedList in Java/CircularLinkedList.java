import java.util.*;
class CircularLinkedList
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
        ns.next=my_first_node;
    }
    void display()
    {
        Node curr=this.my_first_node;
        while(curr.next!=this.my_first_node)
        {
            System.out.println("Node "+curr.data);
            curr=curr.next;
        }
        System.out.println("Node "+curr.data);
    }
    void divide(int d)
    {
        int cnt=0;
        Node curr=this.my_first_node.next;
        Node prev=this.my_first_node;
        cnt=2;
        if(cnt%d==0)
            {
                prev.next=curr.next;
                prev=prev.next;
                curr=prev.next;
                cnt+=2;
            }
        while(curr.next!=this.my_first_node)
        {
            if(cnt%d==0)
            {
                prev.next=curr.next;
                curr=curr.next;
                cnt++;
            }
            prev=prev.next;
            curr=curr.next;
            cnt++;
        }
        if(cnt%d==0)
        {
            prev.next=this.my_first_node;
        }
    }
    public static void main(String ar[])
    {
        int i=0,a[]=new int[10];
        for(i=0;i<10;i++)
        {
            a[i]=sc.nextInt();
        }
        CircularLinkedList ll=new CircularLinkedList();
        ll.create_linked_list(a,10);
        ll.display();
                ll.divide(2);
                ll.display();
        ll.display();
        /*for(i=0;i<10;i++)
        {
            System.out.println(" integer "+a[i]);
        }*/
    }
}