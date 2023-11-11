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
                            action=""
                            method="post"
                        >
                            <h3 class="text-center text-info">Register</h3>
                            <div class="form-group">
                                <label for="Name" class="text-info">Name:</label
                                ><br />
                                <input
                                    type="text"
                                    name="name"
                                    id="name"
                                    class="form-control"
                                />
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-info"
                                    >Email:</label
                                ><br />
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    class="form-control"
                                />
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info"
                                    >Role:</label
                                ><br />
                                <input
                                    type="text"
                                    name="role"
                                    id="role"
                                    class="form-control"
                                />
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info"
                                    >Password:</label
                                ><br />
                                <input
                                    type="text"
                                    name="password"
                                    id="password"
                                    class="form-control"
                                />
                            </div>
                            <div class="form-group mt-3">
                                <input
                                    type="submit"
                                    name="Register"
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
export default {
    // Registration component logic goes here
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
