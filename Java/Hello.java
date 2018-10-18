import java.util.*;
public class Hello
{
    int arr[]=new int[10];
    public void sort(int n)
    {
        int i,j,temp;
        for(i=1;i<n;i++)
        {
            temp=arr[i];
            j=i-1;
            while(j>=0 && arr[j]>temp)
            {
                arr[j+1]=arr[j];
                j=j-1;
            }
            if(j>=0 && arr[j]==temp)
            {
                System.out.println("Ahiya ave 6");
                //temp=arr[i+1];
                //arr[i+1]=-1;
                temp=-1;
            }
                arr[j+1]=temp;
            
        }
    }
    public void input()
    {
        int n;
        Scanner sc=new Scanner(System.in);
        System.out.println("How many integers do you want to enter?");
        n=sc.nextInt();
        for(int i=0;i<n;i++)
        {
            arr[i]=sc.nextInt();
        }
        System.out.println("Before Sorting Array is ");
        for(int i=0;i<n;i++)
        {
            System.out.println(arr[i]);
        }
        sort(n);
        System.out.println("After Sorting");
        for(int i=0;i<n;i++)
        {
            System.out.println(arr[i]);
        }
    }
    public static void main(String ar[])
    {
        //int a[]=new int[10];
        Hello h1=new Hello();
        h1.input();        
    }
}