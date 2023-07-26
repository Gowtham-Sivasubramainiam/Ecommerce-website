#include<stdio.h>
int main()
{
    int a,l=0;
    scanf("%d",&a);
    for(int i=0;i<a;i++)
    {
        for(int j=i;j<a;j++)
        printf(" ");
        for(int k=0;k<=i;k++)
        {
            l++;
            printf("%d ",l);
        }
    }
}