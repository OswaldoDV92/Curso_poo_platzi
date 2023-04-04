from payment import Payment

class Paypal(Payment):
    reference = str
    subsidiary = str

    def __init__(self, id, reference, subsidiary):
        super().__init__(id)
        self.reference = reference
        self.subsidiary = subsidiary