#include<stdio.h>
#include<conio.h>
void main(){
	char *s1="Hello";
	char *s2="World";
	clrscr();
	strcat(s1,s2);
	printf("\n%s \n %d ",s1,strlen(s1));
	getch();

}