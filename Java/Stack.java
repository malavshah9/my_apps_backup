class Stack
{
    int top=0;
    int a[]=new int[10];
    int stored;
    Stack(int n)
    {
        a=new int[n];
    }
    int size()
    {
        return k;
    }
    boolean isEmpty()
    {
        if(top==-1)
        {    top++;
            return true;
        }
        else
            return false;
    }
    void push(int i)
    {
        a[top]=i;
        top++;
    }
    int pop()
    {
        top--;
        return a[top+1];
    }
    void reverse(Stack s)
    {
        int a=s.pop();
        int k=Last(s);
    }
    int Last(Stack s)
    {
        int n=s.pop();
        if(s.size==0)
        {
            return;
        }
        else
        {
            
        }
    }
    void print_stack()
    {
        System.out.println("...Printing Stack...");
        System.out.println();
        for(int i=0;i<top;i++)
        {
            System.out.print(a[i] + " ");
        }
        System.out.println("...Printed...");
    }
    public static void main(String ar[])
    {
        Stack st=new Stack(10);
        st.push(1);
        st.push(2);
        st.push(3);
        st.push(4);
        st.print_stack();
        st.stackReversal(st);
        st.print_stack();
        // st.pop();
        // st.pop();
        // st.print_stack();
        // st.push(10);
        // st.print_stack();
        // st.pop();
        // st.print_stack();
    }
}
