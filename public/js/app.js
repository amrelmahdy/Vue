class Errors {
    constructor() {
        this.errors = {};
    }

    get(field) {
        if (this.errors[field]) {
            return this.errors[field][0];
        }
    }

    has(field) {
        return this.errors.hasOwnProperty(field);
    }


    record(errors) {
        this.errors = errors;
    }


    any() {
        return Object.keys(this.errors).length > 0;
    }

    clear(field) {
        delete this.errors[field]
    }

}


class Form {
    constructor(data) {
        this.originalData = data;

        for (let field in data) {
            this[field] = data[field];
        }

        this.errors = new Errors();
    };

    data() {
        let data = {};
        for (let field in this.originalData){
            data[field] =  this[field];
        }
        /*let data = Object.assign({}, this);

        delete data.data;

        delete data.errors;


        return data;*/

        return data;
    }


    submit(type, url) {
        return new Promise((resolve, reject) => {
            axios[type](url, this.data()).then(response => {
                this.onSuccess(response.data);
                resolve(response.data)
            }).catch(errors => {
                this.onError(errors.response.data.errors);
                reject(errors.response.data.errors)
            });


            this.reset();
        })
    };

    onSuccess(response) {
        alert('success');
    }


    onError(errors) {
        this.errors.record(errors)
    }


    reset() {
        for (let field in this.originalData) {
            this[field] = '';
        }
    }
}


let app = new Vue({
    el: '#app',

    data: {

        form: new Form({
            skill: '',
            percentage: ''
        }),

        skills: []

    },

    methods: {
        onSubmit() {
            this.form.submit('post', '/skills').then(response => {
                this.skills = response;
            }).catch(errors => {
                console.log(errors);
            });
        }
    },

    created() {
        axios.get('/skills').then(response => this.skills = response.data)
    }

});