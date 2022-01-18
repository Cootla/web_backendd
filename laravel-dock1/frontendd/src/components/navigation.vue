<template>
    <div>
        
        <header>
            
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">The Biggest Russia-African online service</span>
                <a class="site-heading" href="#"><img class="section-heading" src="../assets/img/logo.png" alt="..." width="180" height="mx-auto"></a>
                <span class="site-heading-lower">AJ's Business Hub</span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="../views/Homepage.vue">Start</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><router-link to ="/"><a class="nav-link text-uppercase">Home</a></router-link></li>
                        <li class="nav-item px-lg-4"><router-link to ="/About"><a class="nav-link text-uppercase">About</a></router-link></li>
                        <li class="nav-item px-lg-4"><router-link to ="/Serve"><a class="nav-link text-uppercase">Services</a></router-link></li>
                        <li class="nav-item px-lg-4"><router-link to ="/Login"><a class="nav-link text-uppercase">Login</a></router-link></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
export default {
    name: "navigation" 
}
</script>

<style scoped>
</style>