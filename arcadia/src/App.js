import React, {Component} from 'react';
import Header from './components/Header.js'
import Footer from './components/Footer.js'
import axios from 'axios';
import './App.css'
import './components/Arcadia2.png';

class App extends Component{
    state={
        text: ""
    };
    handleAdd=async e =>{
        await this.setState({
           text: e.target.value
        })
    }
    handleSubmit = e =>{
console.log(this.state.text);
let formData = new FormData();
formData.append("text", this.state.text);
const url = "http://localhost:8000/server.php";  /*http://localhost:80/arcadia-backend/*/
axios.post(url, formData)
    .then(res=>console.log(res.data))
    .catch(err=>console.log(err));
    }
    render()
    {
        return (
            <div className="App-header">
                <Header/>
                <input
                    onChange={this.handleAdd}
                    className="form-control"
                    value={this.state.text}
                    type="text"
                    id="text"
                    placeholder="enter some text"/>
<br/>
                <button
                    onClick={this.handleSubmit}
                    className="btn btn-success" id="submit">Save
                                    </button>

                <Footer/>
            </div>
        )
    }
}

/*function App() {


}*/

export default App;
