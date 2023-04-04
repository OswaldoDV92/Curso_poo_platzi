class UberVan extends Car{
    constructor(license, driver, typeCarAccepted, seatsMaterial){
        super(license, driver)
        this.typeCarAccepted = typeCarAccepted;
        this.seatsMaterial = seatsMaterial;
    }

    printDataBrand(){
        console.log(this.typeCarAccepted)
        console.log(this.seatsMaterial)
    }
}
