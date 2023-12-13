<template>
    <div id="login">
        <h3 class="text-center text-white">Register form</h3>
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
                            @submit.prevent="registerUser"
                        >
                            <h3 class="text-center text-info">Register</h3>
                            <div class="form-group">
                                <label for="name" class="text-info">Name:</label
                                ><br />
                                <input
                                    required
                                    v-model="formData.name"
                                    type="text"
                                    id="name"
                                    class="form-control"
                                />
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-info"
                                    >Email:</label
                                ><br />
                                <input
                                    required
                                    v-model="formData.email"
                                    type="email"
                                    id="email"
                                    class="form-control"
                                />
                                <span
                                    style="color: red"
                                    class="error"
                                    v-if="formErrors.email"
                                    >{{ formErrors.email }}</span
                                >
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info"
                                    >Password:</label
                                ><br />
                                <input
                                    required
                                    v-model="formData.password"
                                    type="password"
                                    id="password"
                                    class="form-control"
                                />
                            </div>
                            <div class="form-group">
                                <label for="role" class="text-info">Role:</label
                                ><br />
                                <select
                                    required
                                    v-model="formData.role"
                                    class="form-control"
                                >
                                    <option value="2">Vendor</option>
                                    <option value="3">Job Seekers</option>
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <input
                                    type="submit"
                                    class="btn btn-info btn-md"
                                    value="Register"
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
                name: "",
                email: "",
                password: "",
                role: "Vendor", // Set a default role if needed
            },
            formErrors: {}, // To store form validation errors
        };
    },
    methods: {
        registerUser() {
            axios
                .post("/api/register", this.formData)
                .then((response) => {
                    // Handle success, maybe show a success message
                    Swal.fire({
                        icon: "success",
                        title: "Successful!",
                        text: "Registration Successful!",
                    });
                    console.log("User registered:", response.data.user);
                })
                .catch((error) => {
                    error.response.data.email
                        ? (this.formErrors.email =
                              error.response.data.email[0])
                        : "";

                    console.error("Registration failed:", error.response.data.email);
                });
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
