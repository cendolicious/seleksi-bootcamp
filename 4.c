main(){
    int i,j,input,count=0;
    printf("Masukkan jumlah orang : ");scanf("%d",&input);
    for(i=1;i<=input-1;i++){
            for(j=0;j<i;j++){
                count++;
            }
        }
        printf("result: %d",count);
}
