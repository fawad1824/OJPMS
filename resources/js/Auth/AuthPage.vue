<!-- AuthPage.vue -->
<template>
    <div class="mt-4">
        <div class="text-center">
            <input type="radio" v-model="selectedForm" value="login" /> Login
            <input type="radio" v-model="selectedForm" value="register" />Register
        </div>
        <!-- Render the selected form based on the radio button -->
        <component
            :is="selectedForm === 'login' ? 'Login' : 'Register'"
        ></component>
    </div>
</template>

<script>
import Login from "./Login.vue";
import Register from "./Register.vue";

export default {
    components: {
        Login,
        Register,
    },
    data() {
        return {
            selectedForm: "login",
        };
    },
};
</script>
