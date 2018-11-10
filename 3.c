void segitigaAsli(int input){
    int a,b;
    for(a=1;a<=input;a++){
            for(b=1;b<=a;b++)
                printf("%d,",b);
            printf("\n");
        }
}

main()
{
    int input;
    printf("Masukkan Angka : ");scanf("%d",&input);
    if(input>10){
        printf("Error! Angka melebihi 10.");
    }else{
        segitigaAsli(input);
    }
}

