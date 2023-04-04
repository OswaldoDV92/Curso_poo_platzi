from payment import Payment

class CreditCard(Payment):
    bank = str
    dateExpire = str
    cvvNumber = str

    def __init__(self, id, bank, dateExpire, cvvNumber):
        super().__init__(id)
        self.bank = bank
        self.dateExpire = dateExpire
        self.cvvNumber = cvvNumber