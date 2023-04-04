class CreditCard extends Payment{
    constructor(id, bank, dateExpire, cvvNumber){
        super(id)
        this.bank = bank
        this.dateExpire = dateExpire
        this.cvvNumber = cvvNumber
    }
}