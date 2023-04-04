class UberPool extends Car{
    constructor(license, driver, brand, model){
        super(license, driver)
        this.brand = brand;
        this.model = model;
    }

    printDataBrand(){
        console.log(this.brand)
        console.log(this.model)
    }
}
