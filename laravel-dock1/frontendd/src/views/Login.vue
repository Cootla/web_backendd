<template>
    <div>
        <navigation />
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="my-5">
                            
                            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                                <div class="form-floating">
                                    <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                    <label for="name">Name</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="email" type="email" placeholder="Enter your email..." data-sb-validations="required,email" />
                                    <label for="email">Email address</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="password" type="password" placeholder="Enter your password..." data-sb-validations="required" />
                                    <label for="password">Enter password</label>
                                    <div class="invalid-feedback" data-sb-feedback="password:required">A password is recquired.</div>
                                    <div class="invalid-feedback" data-sb-feedback="password:email">password is not valid.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="phone" type="tel" placeholder="Enter your phone number..." data-sb-validations="required" />
                                    <label for="phone">Phone Number</label>
                                    <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                                </div>
                                
                                <br />
                                
                                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                                <!-- Submit Button-->
                                <button class="btn btn-primary text-uppercase disabled" id="submitButton" type="submit">login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <myfooter />
        
    </div>
</template>


<script>

import navigation from "@/components/navigation";
import myfooter from "@/components/myfooter";
export default {
  name:"Login",
  components:{navigation, myfooter},
  data(){
    return{
      title: 'Login'
    }
  },
  
   

}




</script>