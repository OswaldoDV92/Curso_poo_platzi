class Paypal extends Payment{
    constructor(id, reference, subsidiary){
        super(id)
        this.reference = reference
        this.subsidiary = subsidiary
    }
}