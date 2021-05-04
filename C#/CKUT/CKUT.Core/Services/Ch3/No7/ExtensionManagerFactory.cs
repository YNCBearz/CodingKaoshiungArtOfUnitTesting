namespace CKUT.Core.Services.Ch3.No7
{
    public class ExtensionManagerFactory
    {
        private IFileExtensionManager _fileExtensionManager = null;
        public IFileExtensionManager Create()
        {
            if (_fileExtensionManager != null)
            {
                return _fileExtensionManager;
            }
            return new FileExtensionManager();
        }
        public void SetManager(IFileExtensionManager fileExtensionManager)
        {
            _fileExtensionManager = fileExtensionManager;
        }
    }
}