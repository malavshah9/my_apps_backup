class BST
{
    Tree_Node root;
    BST()
    {
        root=new Tree_Node();
    }
    BST(int data)
    {
        root=new Tree_Node(data);
    }
    Tree_Node create_tree(Tree_Node T,int data)
    {
        if(T==null)
        {
            return new Tree_Node(data);
        }
        else
        {
            if(data<T.key)
            {
                T.left=create_tree(T.left,data);
            }
            else
            {
                T.right=create_tree(T.right,data);
            }
        }
        return T;
    }
    void display_tree(Tree_Node T)
    {
        if(T!=null)
        {
            display_tree(T.left);
            System.out.println(" "+T.key);
            display_tree(T.right);
        }
    }
    boolean search(Tree_Node T,int search_key)
    {
        if(T==null)
        {
            return false;
        }
        else
        {
            if(T.key==search_key)
            {
                return true;
            }
            else
            {
                if(T.key>search_key)
                {
                    if(T.left==null)
                    {
                        return false;
                    }
                    else
                    {
                        return search(T.left,search_key);
                    }
                }
                else
                {
                    if(T.right==null)
                    {
                        return false;
                    }
                    else
                    {
                        return search(T.right,search_key);
                    }
                }
            }
        }
    }
    int max(int a,int b)
    {
        if(a>b)
        {
            return a;
        }
        else
        {
            return b;
        }
    }
    int check_height(Tree_Node T)
    {
        if(T==null)
        {
            return -1;
        }
       else
       {
           return 1+max(check_height(T.left),check_height(T.right));
       }
    }
    public static void main(String ar[])
    {
        BST b1=new BST(10);
        b1.create_tree(b1.root,1);
        b1.create_tree(b1.root,2);
        b1.create_tree(b1.root,3);
        b1.create_tree(b1.root,11);
        b1.create_tree(b1.root,12);
        b1.create_tree(b1.root,13);
        b1.create_tree(b1.root,15);
        b1.display_tree(b1.root);
        System.out.println("Height of Tree is " + b1.check_height(b1.root));
        System.out.println("Key is 5 " + b1.search(b1.root,5));
        System.out.println("Key is 15 " + b1.search(b1.root,15));
        System.out.println("Key is 1 " + b1.search(b1.root,1));

    }
}
