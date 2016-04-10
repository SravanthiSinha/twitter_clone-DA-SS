/* https://www.w3.org/TR/WCAG20-TECHS/G18 */
/*Expected Results

#4 is true.
If this is a sufficient technique for a success criterion, failing this test procedure does not necessarily mean that the success criterion has not been satisfied in some other way, only that this technique has not been successfully implemented and can not be used to claim conformance.
*/
#include<stdio.h>
#include<math.h>
#include <stdlib.h>

double cat ( int R,int G, int C)
{
    double RS,GS,CS,L;

  RS=R/255.0;
  GS=G/255.0;
  CS=C/255.0;
  /*      printf("%lf %lf %lf",RS,GS,CS);*/

  if(RS<0.03928)
    RS=RS/12.92;
  else
    RS= pow((RS+0.055)/1.055,2.4);
  if(GS<0.03928)
    GS=GS/12.92;
  else
    GS= pow((GS+0.055)/1.055,2.4);
 
 if(CS<0.03928)
    CS=CS/12.92;
 else
   CS= pow((CS+0.055)/1.055,2.4);

      L= 0.2126 * RS + 0.7152 * GS + 0.0722 * CS;
      /*      printf("%lf %lf %lf %lf",RS,GS,CS,L);*/
      return L;
}
int main( int argc, char *argv[]){
  int R,G,C;
 double L1,L2;
  R=atoi(argv[1]);
  G=atoi(argv[2]);
  C=atoi(argv[3]);
  L1=cat(R,G,C);
  R=atoi(argv[4]);
  G=atoi(argv[5]);
  C=atoi(argv[6]);
  L2=cat(R,G,C);

  printf("%lf/%lf\n",(L1 + 0.05) , (L2 + 0.05));
  printf("%lf\n",(L1 + 0.05) / (L2 + 0.05));
      
  
  
  return 0;
}
