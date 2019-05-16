let DadJoke = document.querySelector('#dad');

class App extends React.Component {
  constructor() {
    super();
    this.state = {
      searchTerm: "",
      jokes: [],
      isFetchingJoke: false
    };
    this.onSearchChange = this.onSearchChange.bind(this);
    this.searchJokes = this.searchJokes.bind(this);
    
    
  }

  //componentDidMount() {
  //this.searchJokes();
  //}

  searchJokes(limit = 20) {
    this.setState({ isFetchingJoke: true });
    fetch(
      `https://icanhazdadjoke.com/search?term=${
        this.state.searchTerm
      }&limit=${limit}`,
      {
        method: "GET",
        headers: {
          Accept: "application/json"
        }
      }
    )
      .then(response => response.json())
      .then(json => {
        const jokes = json.results;
        this.setState({
          jokes,
          isFetchingJoke: false
        });
      });
  } //event => console.log(event.target.value)

  onSearchChange(value) {
    this.setState({ searchTerm: event.target.value });
  }

  renderJokes() {
    return (
      <ul>
        {this.state.jokes.map(item => (
          <li key={item.id}>{item.joke}</li>
        ))}
      </ul>
    );
  }

  onSearchSubmit(event) {
    event.preventDefault();
    this.searchJokes();
  }

  render() {
    return (
      <div>
        <form onSubmit={this.onSearchSubmit}>
            <input
                type="text"
                placeholder="Enter search term"
                onChange={this.onSearchChange}
      />
      <br />
      <button onClick={() => this.searchJokes(20)}>Search</button>
      <button onClick={() => this.searchJokes(1)} disabled={this.state.isFetchingJoke}>
        I'm feeling funny
      </button>
    </form>

        {this.state.isFetchingJoke
          ? "searching for jokes..."
          : this.renderJokes()}
      </div>
    );
  }
}

const rootElement = document.getElementById("dad");
ReactDOM.render( < App version = "1.0" / > , rootElement);
