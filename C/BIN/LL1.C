#include<stdio.h>
#include<conio.h>
struct node{
	int data;
	struct node* next;
}*head,*ptr;
void main()
{
	int n;
	printf("\nEnter Number:\n");
	scanf("%d",&n);
	head=(struct node *)malloc(sizeof(struct node *));
	head->data=n;
	printf("\n%d",head->data);
	getch();
}