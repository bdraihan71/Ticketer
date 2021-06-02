<template lang="">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2">
        <div class="container">
            <router-link class="navbar-brand" :to="{name: 'home'}">Ticketer</router-link>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <router-link class="nav-link active" aria-current="page" :to="{name: 'home'}">Home</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link active":to="{name: 'login'}">Login</router-link>
                    </li>
                     <li class="nav-item">
                        <router-link class="nav-link active":to="{name: 'registration'}">Registration</router-link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>
<script>
export default {

}
</script>
<style lang="">

</style>
