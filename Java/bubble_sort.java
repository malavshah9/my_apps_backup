import java.util.*;
class bubble_sort
{
    public static void main(String ar[])
    {
        int n;
        System.out.println("Enter N");
        Scanner sc=new Scanner(System.in);
        n=sc.nextInt();
        int arr[]=new int[n];
        for(int i=0;i<n;i++)
        {
            arr[i]=sc.nextInt();
        }
        for(int k=0;k<n-1;k++)
        {
            for(int j=0;j<n-1;j++)
        {
            if(arr[j+1]<arr[j])
            {
                int temp=arr[j+1];
                arr[j+1]=arr[j];
                arr[j]=temp;
            }
        }
        }
        for(int i=0;i<n;i++)
        {
            System.out.println("Number is "+arr[i]);
        }
    }
}