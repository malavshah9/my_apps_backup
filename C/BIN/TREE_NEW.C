#include<stdio.h>
#include<conio.h>
struct tree
{
	int data;
	struct tree *left;
	struct tree *right;
};
struct tree * create_node(int data)
{
	struct tree *temp=(struct tree *)malloc(sizeof(struct tree));
	temp->data=data;
	temp->left=NULL;
	temp->right=NULL;
	return temp;
}

struct tree * create_tree(struct tree *temp,int data)
{
	if(temp==NULL)
	{
		return create_node(data);
	}
	else
	{
		if(data< (temp->data) )
		{
			temp->left=create_tree(temp->left,data);
		}
		else
		{
			temp->right=create_tree(temp->right,data);
		}
	}
	return temp;
}

void display(struct tree * root)
{
	if(root!=NULL)
	{
		display(root->left);
		printf(" %d ",root->data);
		display(root->right);
	}
}
void main()
{
	int data;
	int i=0;
	struct tree *head=NULL,*ptr=NULL;
	clrscr();
	head=create_tree(head,5);
	for(i=1;i<5;i++)
	{
		printf("\n Enter Number \n ");
		scanf("%d",&data);
		create_tree(head,data);

	}
	display(head);
	getch();
}