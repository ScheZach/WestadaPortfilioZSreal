const SearchForm = props => {
  const onSubmit = event => {
    event.preventDefault();
    props.onFormSubmit();
  };
  return (
    <form onSubmit={onSubmit}>
      <input
        type="text"
        placeholder="Enter search term"
        onChange={event => props.onSearchValueChange(event.target.value)}
      />
      <br />
      <button>Search</button>
      <button onClick={props.onSingleSearchClick} disabled={props.isSearching}>
        I'm feeling funny
      </button>
    </form>
  );
};

export default SearchForm;
