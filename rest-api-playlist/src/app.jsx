class Ninjas extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            ninjas: []
        };
        this.handleSubmit = this.handleSubmit.bind(this);
    }

    handleSubmit(e) {
        e.preventDefault();
        const lng = this.lngInput.value;
        const lat = this.latInput.value;

        fetch(`/api/ninjas?lng=${lng}&lat=${lat}`)
            .then(response => response.json())
            .then(data => {
                this.setState({ ninjas: data });
                console.log(data);
            });
    }

    render() {
        const { ninjas } = this.state;
        // Map ninjas array to ninjasList array
        const ninjasList = ninjas.map((ninja, index) => (
            <li key={index}>
                {/* Access properties from each ninja object */}
                {ninja.obj && ninja.obj.available && (
                    <span className="{ninja.obj.available}"></span>
                )}
                {/* Access ninja name */}
                <span className="name">{ninja.obj ? ninja.obj.name : 'Name not available'}</span>
                {/* Access ninja rank */}
                <span className="rank">{ninja.obj ? ninja.obj.rank : 'Rank not available'}</span>
                {/* Access ninja distance */}
                <span className="dist">{!isNaN(ninja.dis) ? `${Math.floor(ninja.dis / 1000)} km` : 'Distance not available'}</span>
            </li>
        ));

        return (
            <div id="ninja-container">
                <form id="search" onSubmit={this.handleSubmit}>
                    <label>Enter your Latitude:</label>
                    {/* Refs for latitude input */}
                    <input type="text" ref={input => this.latInput = input} placeholder="latitude" required />
                    <label>Enter your Longitude:</label>
                    {/* Refs for longitude input */}
                    <input type="text" ref={input => this.lngInput = input} placeholder="longitude" required />
                    <input type="submit" value="Find Ninjas" />
                </form>
                <ul>{ninjasList}</ul>
            </div>
        );
    }
}

ReactDOM.render(<Ninjas />, document.getElementById('ninjas'));
