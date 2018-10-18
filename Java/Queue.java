class Queue
{
    int top=0;
    int bottom=0;
    int a[];
    int size;
    Queue(int n)
    {
        size=n;
        a=new int[n];
    }
    boolean isEmpty(){
        if(bottom>=top)
        {
            return false;
        }
        else
        {
            return true;
        }
    }
    boolean isOverFlow(){
        if(bottom==size)
        {
            return true;
        }
        else
        {
                return false;
        }
    }
    void enque(int temp)
    {
        if(isOverFlow())
        {
            System.out.println("Can`t Enque!!! Queue Overflow.");
        }
        else
        {
            a[bottom]=temp;
            bottom++;
        }
    }
    int deque()
    {
        if(isEmpty())
        {
            bottom=top=0;
            return -1;
        }
        else
        {
            int d=a[top];
            top++;
            return d;
        }
    }
    void print_q()
    {
        System.out.println("...Printing Q...");
        for(int i=top;i<bottom;i++)
        {
            System.out.print(a[i] + " ");
        }
        System.out.println("...Printed Q...");
    }
    void reverse()
    {
        int temp=0;
        if(!isEmpty())
        {
            temp=deque();
            reverse();
        }
        enque(temp);
    }
    public static void main(String ar[])
    {
        Queue q=new Queue(15);
        q.enque(1);
        q.enque(2);
        q.enque(3);
        q.enque(4);
        q.enque(5);
        q.deque();
        q.print_q();
        q.reverse();
        q.deque();
        q.print_q();
        /*
        q.print_q();
        q.deque();
        q.deque();
        q.print_q();
        q.deque();
        q.deque();
        q.print_q();
        q.deque();
        q.print_q();*/
    }
}