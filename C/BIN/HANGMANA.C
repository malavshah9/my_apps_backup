#include<stdio.h>
#include<conio.h>
#include<stdlib.h>
void main()
{
  FILE *f;
  int n;
  int i=0;
  char ch[1024];
  int index=0;
  clrscr();
  f=fopen("Words.txt","r");
  if(f==NULL){
		printf("\nFile can`t opened");
		}
  else{
		printf("\nFile Opened Successfully");
		n=rand()%10+1;
		n=3;
		printf("\n%d",n);
		fscanf(f,"%s",ch);
		i=1;
		while(i<=n){
			fscanf(f,"%s",ch);
			i++;
		}
		fscanf(f,"%s",ch);
		printf("\nstring %s",ch);
  }
  getch();
		}