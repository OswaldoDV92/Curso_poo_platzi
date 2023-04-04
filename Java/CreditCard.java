public class CreditCard extends Payment{
    String bank;
    String dateExpire;
    String cvvNumber;
    Payment id;

    public CreditCard(Integer id, String bank, String dateExpire, String cvvNumber){
        super(id);
        this.bank = bank;
        this.dateExpire = dateExpire;
        this.cvvNumber = cvvNumber;
    }
}
