/*function Account(name, document) {
    this.id;
    this.name = name;
    this.document = document;
    this.email;
    this.password;
}*/

class Account{
    /*constructor(name, document){
        this.id;
        this.name = name;
        this.document = document;
        this.email;
        this.password;
    }*/

    constructor(name, document, email, password){
        this.id
        this.name = name
        this.document = document
        this.email = email
        this.password = password
    }

    printDataUser(){
        console.log(this.name)
        console.log(this.document)
        console.log(this.email)
        console.log(this.password)
    }

    printDataDriver(){
        console.log(this.name)
        console.log(this.document)
        console.log(this.email)
        console.log(this.password)
    }
}