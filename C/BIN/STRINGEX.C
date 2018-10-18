#include<stdio.h>
#include<conio.h>
#include<string.h>
void main(){

	FILE *fp=fopen("WORDS.txt","r");
	int ch;
	while((ch=fgetc(fp))!=NULL){
	printf("%c",ch);
	}
	getch();


}