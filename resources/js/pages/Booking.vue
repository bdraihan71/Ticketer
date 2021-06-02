<template>
    <div class="container">
        <div class="row justify-content-center">
             <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Booking for <b> {{movie.name}} </b></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img class="card-img-top" :src="movie.image">
                                    <h4 class="card-title mt-2"><b>{{ movie.name }} </b> </h4>
                                    <p class="card-text mt-2">{{ movie.description }}</p>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select Ticket Category*</label>
                                    <select class="form-control" id="exampleFormControlSelect1" @change="getTicketClasses()" v-model="ticketCategoryId">
                                        <option :value="null">Please Select</option>
                                        <option
                                            v-for="ticketCategory in ticketCategories"
                                            :key="ticketCategory.id"
                                            :value="ticketCategory.id"
                                            >
                                            {{ticketCategory.name}}
                                        </option>
                                    </select>
                                </div>

                                <div v-show="ticketClasses.length > 0" class="form-group">
                                    <label for="exampleFormControlSelect1">Select Ticket Class*</label><br>
                                    <div class="form-check form-check-inline" v-for="ticketClass in ticketClasses"  :key="ticketClass.id">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" :value="ticketClass.id" v-model="ticketClassId" @change="getDate()">
                                        <label class="form-check-label" for="inlineRadio1">{{ticketClass.name}} - {{ticketClass.price}} TK</label>
                                    </div>
                                </div>

                                <div v-show="openDate" class="form-group">
                                    <label for="birthday">Select Date:</label>
                                    <input type="date" v-model="date">
                                    <button class="btn btn-success" @click="getShowTimes()">Submit Date</button>
                                </div>

                                <div v-show="showTimes.length > 0" class="form-group" v-for="showTime in showTimes"  :key="showTime.id">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio1" :value="showTime.id" v-model="showTimeId" @change="getSeat()">
                                        <label class="form-check-label" for="inlineRadio1">{{showTime.start_at}}</label>
                                    </div>
                                </div>

                                <div v-show="seats.length > 0" class="row">
                                    <button  v-for="(seat,index) in seats"
                                    :key="index" class="col-md-2 p-2 m-1 bg-secondary text-white"
                                    @click="addCart(seat.id)"
                                    >{{seat.name}}</button>
                                </div>

                                <div v-show="carts.length > 0" class="row">
                                    <div class="col-md-3">Date:</div>
                                    <div class="col-md-3">12/12/2021</div>
                                    <div class="col-md-3">time:</div>
                                    <div class="col-md-3">10:00</div>
                                </div>

                                <div v-show="carts.length > 0" class="row mt-3">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Seat</th>
                                            <th scope="col">Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <th scope="row">1</th>
                                            <td>Seat 1</td>
                                            <td>150</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">2</th>
                                            <td>Seat 2</td>
                                            <td>150</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">3</th>
                                           <td>Seat 2</td>
                                            <td>150</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div v-show="carts.length > 0" class="row">
                                    <div class="col-md-6 h4">Total:</div>
                                    <div class="col-md-6"><b>450 .TK</b></div>
                                </div>
                                <button v-show="carts.length > 0" class="btn btn-success">Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data()
            {
                return{
                    movie: {},
                    id: this.$route.params.id,
                    ticketCategories: [],
                    ticketClasses: [],
                    showTimes: [],
                    allDate : [],
                    seats: [],
                    carts: [],
                    ticketCategoryId: null,
                    ticketClassId: null,
                    date: null,
                    openDate: false,
                    showTimeId: null,
                    seatId: null,
                    userId: 1,
                    bookingTime:null
                }
            },
        mounted() {
            this.getMovie();
            this.getTicketCategories();
        },

        methods: {
            getMovie(){
                axios.get('/api/movie/' + this.id  ).then(response => {
                    this.movie = response.data.movie;
                });
            },

            getTicketCategories(){
                axios.get('/api/ticket_categories/' + this.id ).then(response => {
                    this.ticketCategories = response.data.ticketCategories;
                });
            },

            getTicketClasses(){
                axios.get('/api/ticket_classes/' + this.ticketCategoryId ).then(response => {
                    this.ticketClasses = response.data.ticketClasses;
                    this.showTimes = [];
                    this.openDate = false;
                    this.seats = [];
                });
            },

            getDate(){
                this.openDate = true;
                this.showTimes = [];
                this.date = null;
                this.seats = [];
            },

            getShowTimes(){
                axios.get('/api/show_times/' + this.ticketClassId +'/' + this.id + '/' + this.date).then(response => {
                    if (response.data.showTimes.length > 0) {
                        this.showTimes = response.data.showTimes;
                    } else{
                        alert("No show available");
                    }
                });
            },

            getSeat(){
                axios.get('/api/seats/' + this.ticketClassId + '/' + this.showTimeId).then(response => {
                    this.seats = response.data.seats;
                });
            },

            addCart(id){
                axios.post('/api/cart/', {userId : this.userId, id: id}).then(response => {
                    this.carts = response.data.carts;
                });
            },

        },
    }
</script>
