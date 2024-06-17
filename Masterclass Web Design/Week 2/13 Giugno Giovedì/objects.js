var person = {
    firstName: "Alessio",
    lastName: "Simeone",
    age: 24,
    greet: function () {
        console.log("Hello, my name is " + this.firstName + " " + this.lastName + " " + "and i'm " + this.age + " " + "years old.");
    },
    getFullName: function () {
        console.log(this.firstName + " " + this.lastName);
    }
};
person.greet();
person.getFullName();