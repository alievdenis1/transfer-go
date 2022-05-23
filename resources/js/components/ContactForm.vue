<template>
    <div class="container">
        <div class="row justify-content-center my-4">
            <div class="col-md-8">
                <div class="alert alert-success" role="alert" v-if="success">
                    Отправленно
                </div>
                <div v-else class="card">
                    <div class="card-header">Форма обратной связи</div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Имя:</label>
                                <input v-model="name" type="text" class="form-control" id="name">
                                <div class="text-danger">{{errors.name}}</div>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail:</label>
                                <input v-model="email" type="text" class="form-control" id="email">
                                <div class="text-danger">{{errors.email}}</div>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Телефон:</label>
                                <input v-model="phone" type="text" class="form-control" id="iphone">
                                <div class="text-danger">{{errors.phone}}</div>
                            </div>

                            <div class="mb-3">
                                <label for="message" class="message">Текст сообщения:</label>
                                <textarea v-model="message" class="form-control" id="message" rows="3"></textarea>
                                <div class="text-danger">{{errors.message}}</div>
                            </div>

                            <div class="form-file mb-3">
                                <input v-on:change="handleFileUpload()" type="file" ref="file" class="form-file-input" id="file">
                            </div>

                            <button type="submit" class="btn btn-primary" @click.prevent="store">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data: () => ({
        name: "",
        email: "",
        phone: "",
        message: "",
        success: false,
        errors: {
            name: "",
            email: "",
            phone: "",
            message: "",
        }
    }),
    methods: {
        handleFileUpload() {
            this.file = this.$refs.file.files[0];
        },
        onlyNumbers(string) {
          return string.replace(/[^\d]/g, '')
        },
        validateEmail(email)
        {
            var re = /\S+@\S+\.\S+/;
            return re.test(email);
        },
        validation() {
            let isValid = true;

            this.errors.name = "";
            if (this.name == "") {
                this.errors.name = "Поле обязательно к заполнению"
                isValid = false;
            }

            this.errors.phone = "";
            let phone = this.onlyNumbers(this.phone);

            if (phone.length != 11) {
                this.errors.phone = "Номер телефона должен быть из 11 чисел"
                isValid = false;
            }

            this.errors.email = "";
            if (this.email == "") {
                this.errors.email = "Поле обязательно к заполнению"
                isValid = false;
            } else if (!this.validateEmail(this.email)) {
                this.errors.email = "Некорректный e-mail";
                isValid = false;
            }

            this.errors.message = "";
            if (this.message == "") {
                this.errors.message = "Поле обязательно к заполнению"
                isValid = false;
            }

            if (isValid) {
                return true
            }
            return false
        },
        store() {
            if (!this.validation()) {
                return
            }

            const config = {
                'content-type': 'multipart/form-data',
            }

            const formData = new FormData()
            formData.append('name', this.name)
            formData.append('email', this.email)
            formData.append('phone', this.onlyNumbers(this.phone))
            formData.append('message', this.message)
            formData.append('file', this.file)

            axios.post('api/contact-forms', formData, config)
                .then(res => {
                    this.success = true
                })
                .catch(err => {
                    console.log(err.response.data)
                });
        }
    }
}
</script>
