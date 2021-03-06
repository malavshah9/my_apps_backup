#include<stdio.h>
#include<conio.h>
struct node
{
	struct node *left;
	int data;
	struct node *right;
}*head,*ptr;
struct node * create()
{
	struct node * temp=(struct node *)malloc(sizeof(struct node));
	temp->left=NULL;
	temp->right=NULL;
	return temp;
}
void make_node(struct node * temp,int data)
{
		if(temp==NULL)
		{
			temp=create();
			temp->data=data;
		}
		else
		{
			if(data<(temp->data))
			{
				make_node(&(temp->left),data);
			}
			else
			{
				make_node(&(temp->right),data);
			}
		}
}
void print(struct node *root)
{
	if(root!=NULL)
	{
		print(root->left);
		printf("\n %d",root->data);
		print(root->right);
	}
}
void main()
{
	int data=1;
	struct node* root=NULL;
	clrscr();
	while(data)
	{
		printf("Enter Number\n Enter 0 to Stop\n");
		scanf("%d",&data);
		make_node(&root,data);
	}
	print(root);
	getch();
}