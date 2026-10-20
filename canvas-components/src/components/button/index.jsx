import { Button as MydsButton } from '@govtechmy/myds-react/button';

const Button = ({ text, variant, size }) => (
  <MydsButton variant={variant} size={size}>
    {text}
  </MydsButton>
);

export default Button;
