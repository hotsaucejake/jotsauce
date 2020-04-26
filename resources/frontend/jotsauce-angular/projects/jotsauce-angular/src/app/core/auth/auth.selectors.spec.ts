import { selectAuth, selectIsAuthenticated } from './auth.selectors';

describe('Auth Selectors', () => {
  it('selectAuth', () => {
    const state = createAuthState();
    expect(selectAuth(state)).toBe(state.auth);
  });

  it('selectIsAuthenticated', () => {
    const state = createAuthState();
    expect(selectIsAuthenticated(state)).toBe(false);
  });
});

/* tslint:disable:no-any */
function createAuthState() {
  return {
    auth: {
      isAuthenticated: false
    },
    settings: {} as any,
    router: {} as any
  };
}
/* tslint:disable:no-any */
