<template>
    <div id="login">
        <h3 class="text-center text-white">Login form</h3>
        <div class="container">
            <div
                id="login-row"
                class="row justify-content-center align-items-center"
            >
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form
                            id="login-form"
                            class="form"
                            @submit.prevent="loginUser"
                        >
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info"
                                    >Username:</label
                                ><br />
                                <input
                                    v-model="formData.email"
                                    type="email"
                                    name="email"
                                    id="email"
                                    class="form-control"
                                />
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info"
                                    >Password:</label
                                ><br />
                                <input
                                    v-model="formData.password"
                                    type="password"
                                    name="password"
                                    id="password"
                                    class="form-control"
                                />
                            </div>
                            <div class="form-group mt-3">
                                <label for="remember-me" class="text-info">
                                    <span>Remember me</span>
                                    <span
                                        ><input
                                            id="remember-me"
                                            name="remember-me"
                                            type="checkbox"
                                    /></span>
                                </label>
                                <br />
                                <input
                                    type="submit"
                                    name="Login"
                                    class="btn btn-info btn-md"
                                    value="Login"
                                />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
import Swal from "sweetalert2"; // Import SweetAlert2

export default {
    data() {
        return {
            formData: {
                email: "",
                password: "",
            },
        };
    },
    methods: {
        async loginUser() {
            try {
                const response = await axios.post("/api/login", this.formData);
                Swal.fire({
                    icon: "success",
                    title: "Successful!",
                    text: "Login Successful!",
                });
                console.log("Logged in successfully:", response.data);
                localStorage.setItem('Token', response.data.token);
                localStorage.setItem('Users',  JSON.stringify(response.data.user));
                this.$router.push({ name: 'MainAdminLayout' }); // Replace 'MainAdminLayout' with the desired route name
            } catch (error) {
                if (error.response.data.error == "Unauthorized") {
                    Swal.fire({
                        icon: "error",
                        title: "Failed!",
                        text: "Unauthorized!",
                    });
                }
                console.error("Login failed:", error.response.data);
            }
        },
    },
};
</script>

<style scoped>
#login .container #login-row #login-column #login-box {
    max-width: 600px;
    border: 1px solid #9c9c9c;
    background-color: #eaeaea;
}
#login .container #login-row #login-column #login-box #login-form {
    padding: 20px;
}
</style>
