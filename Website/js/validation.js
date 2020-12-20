class Validator {

    // - LOGIN FORM -
    ValidateLogin(username, password){
        console.log('same');
        console.log(password);
        if(this.ValidateUsername(username) && this.ValidatePassword(password)){
            return true;
        } else return false;
        
    }    
    // - LOGIN FORM END -

    // - PROFILE FORM -
    
    // - PROFILE FORM END -

    // - SEARCH FORM - 
    ValidateSearchForm(city, min, max) {
        if(this.ValidateCity(city) && this.ValidatePrices(min, max)){
            return true;
        }else return false;
    }

    isMinLowerThanMax(min, max) { //checks that the minimum price is smaller than maximum price
        if (min < max) return true;
        else alert("Maximum price must be larger than minimum price"); return false;
    }
    // - SEARCH FORM END -


    // - GENERAL METHODS -
    ValidateUsername(username){
        if(username == null || username == ""){
            alert("Username cannot be empty");
            return false;
        } else return true;
    }

    ValidatePassword(password){
        if(password == null || password == ""){
            alert("Password cannot be empty");
            return false;
        } else return true;
    }

    ValidatePrices(min, max) {
        if (this.isPositiveInteger(min), this.isPositiveInteger(max), this.isMinLowerThanMax(min, max)) return true;
        else return false;
    }

    ValidateCity(city) {
        if (city == null || city == "") {
            alert("City can't be blank");
            return false;
        } else return true;
    }

    isPositiveInteger(input) {
        if (Math.sign(input) == 1) {
            return true;
        }
        else if (Math.sign(input) == -1) {
            alert("Integers must be positive");
            return false;
        }
    }
    // - GENERAL METHODS END -
}