namespace CKUT.Core.Services.Ch5.Models
{
    public class Stone : Tile
    {
        private readonly IFalling fallingState;

        public Stone(IFalling falling)
        {
            fallingState = falling;
        }

        public bool IsStony()
        {
            return true;
        }

        public bool IsFallingStone()
        {
            return fallingState.isFalling();
        }

        public bool IsAir()
        {
            return false;
        }

        public bool IsBox()
        {
            return false;
        }

        public bool IsFallingBox()
        {
            return false;
        }

        public void MoveHorizontal()
        {
            fallingState.MoveHorizontal();
        }
    }
}