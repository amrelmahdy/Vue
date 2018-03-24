<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vue Practice</title>


    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 80%;
            margin: auto;
        }

        input {
            width: 100%;
            height: 30px;
            margin-bottom: 15px;
            border: 1px solid #EEE;
            border-radius: 5px;
        }

        label{
            display: block;
            margin-bottom: 5px;
            margin-top: 30px;
        }

        .btn{
            background: #2ca02c;
            color: #FFF;
        }

        .danger{
            display: block;
            margin-bottom: 15px;
            color: #d62728;
        }

    </style>
</head>
<body>


<div id="app">
    <div class="container">
        <ul>
            <li v-for="skill in skills">@{{ skill.skill + ' (' + skill.percentage + ')' }}</li>
        </ul>

        <form action="/skills" method="post" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
            <label for="skill">Skill</label>
            <input  type="text" id="skill" v-model="form.skill" name="skill">
            <small  v-show="form.errors.has('skill')" class="danger" v-text="form.errors.get('skill')"></small>

            <label for="percentage">Percentage</label>
            <input name="percentage" type="text" id="percentage" v-model="form.percentage" >
            <small v-if="form.errors.has('percentage')" class="danger" v-text="form.errors.get('percentage')"></small>

            <input :disabled="form.errors.any()" class="btn" type="submit" value="submit">

        </form>
    </div>
</div>


<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.15/dist/vue.js"></script>
<script src="{{ URL::to('js/app.js') }}"></script>

</body>
</html>
