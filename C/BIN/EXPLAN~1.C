#include <stdio.h>
#include <string.h>
#include <math.h>
#include <stdlib.h>
int factors(int *arr,int n)
{
    int i;
    int cnt=0;
    arr=(int *)malloc(sizeof(int)*n);
    for(i=2;i<n;i++)
    {
	if(n%i==0)
	{
	    arr[cnt]=i;
	    cnt++;
	}
    }
    return cnt;
}
int main() {
    int n=0,q=0;
    int cost[100],length[100];
    int ans[100];
    int min_c,len_new_rod,cnt=0,total_cost=0,targeted_length,i=0,j=0,top=0;
//    int arr[100];
	int *arr;
    clrscr();
    scanf("%d %d",&n,&q);
    for(i=0;i<n;i++)
    {
	scanf("%d",&cost[i]);
    }
    for(i=0;i<q-1;i++)
    {
	scanf("%d",&length[i]);
    }
    scanf("%d",&length[i]);
    for(i=0;i<q;i++)
    {
      targeted_length=length[i];
	//arr=(int *)malloc(sizeof(int)*targeted_length);
/*	while(targeted_length!=1)
	{                                 */
	    cnt=factors(arr,targeted_length);
	    for(j=0;j<cnt;j++)
	    {
		printf("\n %d",*(arr+j));
	    }
	    min_c=cost[*(arr+0)];
	    len_new_rod=*(arr+0);
	    for(j=1;j<cnt;j++)
	    {
		if(cost[*(arr+j)]<min_c)
		{
		    min_c=cost[*(arr+j)];
		    len_new_rod=*(arr+j);
		}
	    }
	    printf("\n Length New Rod = %d",len_new_rod);
	/*    total_cost=total_cost+min_c;*/
  //	    targeted_length=targeted_length/len_new_rod;
    //	}
//	ans[top]=total_cost;
      //  top++;
    }
    for(i=0;i<top;i++)
    {
	printf("%d\n",ans[i]);
    }
    /* Enter your code here. Read input from STDIN. Print output to STDOUT */
    getch();
    return 0;
}
