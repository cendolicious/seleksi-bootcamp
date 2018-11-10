int myCountChar(char str[1000],char search){
    int i,count=0;
    for(i=0;str[i]!= '\0'; i++){
        if(str[i] == search)
            count++;
    }
    return count;
}

main(){
    printf("Length of string: %d", myCountChar("arkademy",'k'));
    return 0;
}
